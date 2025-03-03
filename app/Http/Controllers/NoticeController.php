<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use App\Models\Notice;
use App\Models\NoticeLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    // Show all notices
    public function show()
    {
        $notices = Notice::all();
        return view('auth.show_notice', compact('notices'));
    }

    public function auditshow()
    {
        $deletedNotices = AuditLog::with('user')->get();
        return view('auth.deleted_notices', compact('deletedNotices'));
    }

    // Display the notice index page
    public function index()
    {
        $notices = Notice::all();
        return view('auth.notice', compact('notices'));
    }

    // Show the create notice form
    public function create()
    {
        return view('auth.create_notice');
    }

    // Store a new notice
    public function store(Request $request)
    {
        $request->validate([
            'des_a' => 'required|string|max:255',
            'des_b' => 'required|string|max:255',
        ]);
    
        Notice::create([
            'des_a' => $request->input('des_a'),
            'des_b' => $request->input('des_b'),
            'created_by' => Auth::id(), // Set the created_by column
        ]);
    
        return redirect()->back()->with('status', 'Notice Added Successfully');
    }
    
    // Delete a notice and log it
    public function destroy($id)
    {
        // Debugging: Confirm the method is being called
        \Log::info("Destroy method called for notice ID: $id");
    
        $notice = Notice::findOrFail($id);
    
        // Debugging: Confirm the notice is found
        \Log::info("Notice found", ['notice' => $notice]);
    
        if (!Auth::check()) {
            \Log::warning("User not authenticated");
            return redirect()->back()->with('error', 'You need to be logged in to perform this action');
        }
    
        try {
            // Debugging: Confirm the user is authenticated
            \Log::info("User authenticated", ['user_id' => Auth::id()]);
    
            // Check if there are already 10 logs
            $logCount = NoticeLog::count();
            \Log::info("Current log count", ['log_count' => $logCount]);
    
            if ($logCount >= 10) {
                // Delete the oldest log
                $oldestLog = NoticeLog::orderBy('created_at', 'asc')->first();
                if ($oldestLog) {
                    \Log::info("Deleting oldest log", ['oldest_log' => $oldestLog]);
                    $oldestLog->delete();
                }
            }
    
            // Store deleted notice information in NoticeLog
            $noticeLogData = [
                'notice_id' => $notice->id,
                'des_a' => $notice->des_a,
                'des_b' => $notice->des_b,
                'created_by' => $notice->created_by, // Include the creator's ID
                'deleted_by' => Auth::id(), // Include the deleter's ID
                'deleted_at' => now(),
            ];
    
            // Debugging: Confirm the data to be logged
            \Log::info("Notice log data", ['notice_log_data' => $noticeLogData]);
    
            // Create a new log entry in the notice_logs table
            $noticeLog = NoticeLog::create($noticeLogData);
    
            // Debugging: Confirm the log was created
            \Log::info("Notice log created", ['notice_log' => $noticeLog]);
    
            // Now, delete the notice from the notices table
            $notice->delete();
    
            // Debugging: Confirm the notice was deleted
            \Log::info("Notice deleted successfully", ['notice' => $notice]);
    
            return redirect()->back()->with('status', 'Notice Deleted and Logged Successfully');
        } catch (\Exception $e) {
            // Debugging: Log the error
            \Log::error("Error logging deletion: " . $e->getMessage(), ['exception' => $e]);
            return redirect()->back()->with('error', 'Error logging deletion');
        }
    }

    // Show deleted notices from the notice logs
    public function showDeletedNotices()
{
    try {
        // Fetch the last 10 deleted notices with creator and deleter information
        $deletedNotices = NoticeLog::with(['creator', 'deleter'])
            ->orderBy('deleted_at', 'desc')
            ->take(10)
            ->get();

        // Count the number of notices deleted by the current admin
        $currentAdminDeletedCount = NoticeLog::where('deleted_by', Auth::id())->count();

        // Debugging: Confirm the count is correct
        \Log::info("Current admin deleted count", ['count' => $currentAdminDeletedCount]);

        if ($deletedNotices->isEmpty()) {
            \Log::info("No deleted notices found in NoticeLog.");
        } else {
            \Log::info("Deleted notices retrieved successfully.", ['notices' => $deletedNotices]);
        }

        // Pass the variables to the view
        return view('auth.deleted_notices', [
            'deletedNotices' => $deletedNotices,
            'currentAdminDeletedCount' => $currentAdminDeletedCount,
        ]);
    } catch (\Exception $e) {
        \Log::error("Error retrieving deleted notices: " . $e->getMessage());
        return redirect()->back()->with('error', 'Error fetching deleted notices.');
    }
}
}