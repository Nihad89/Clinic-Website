<?php

namespace App\Http\Controllers;
use App\Models\AuditLog;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NoticeController extends Controller
{
    public function show()
    {
        $notice = Notice::all();
        return view('auth.show_notice', compact('notice'));
    }

    public function index()
    {
        $notice = Notice::all();
        return view('auth.notice', compact('notice'));
    }

    public function create()
    {
        return view('auth.create_notice');
    }

    public function store(Request $request)
    {
        $notice = new Notice;
        $notice->des_a = $request->input('des_a');
        $notice->des_b = $request->input('des_b');
        $notice->save();

        return redirect()->back()->with('status', 'Notice Added Successfully');
    }


    public function destroy($id)
    {
        $notice = Notice::findOrFail($id);
    
        // Check if admin is authenticated
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'You need to be logged in to perform this action');
        }
    
        // Log for debugging - check if Auth::id() and notice data are available
        logger()->info('Deleting notice', [
            'notice_id' => $notice->id, 
            'admin_id' => Auth::id(),
            'notice_data' => $notice
        ]);
    
        // Log the deletion in the Audit Log table
        $log = AuditLog::create([
            'notice_id' => $notice->id,
            'des_a' => $notice->des_a,
            'des_b' => $notice->des_b,
            'deleted_by' => Auth::id(),
            'deleted_at' => now(),
        ]);
    
        // Check if the log was created successfully
        if ($log) {
            logger()->info('Audit Log Created:', ['log' => $log]);
        } else {
            logger()->error('Failed to create audit log');
        }
    
        // Delete the notice
        $notice->delete();
    
        return redirect()->back()->with('status', 'Notice Deleted Successfully');
    }


public function deleteNotice($id)
{
    // Retrieve the notice
    $notice = Notice::findOrFail($id);

    // Log the deletion in the audit_log table
    AuditLog::create([
        'notice_id' => $notice->id,
        'des_a' => $notice->des_a,
        'des_b' => $notice->des_b,
        'deleted_by' => Auth::id(), // ID of the admin performing the action
        'deleted_at' => now(),     // Log the timestamp
    ]);

    // Delete the notice from the notices table
    $notice->delete();

    return redirect()->back()->with('success', 'Notice deleted and logged successfully.');
}


    public function showDeletedNotices()
    {
        // Fetch all audit logs along with the admin who deleted the notice
        $deletedNotices = AuditLog::with('user')->get();
    
        // Check if data is retrieved
        logger()->info('Fetched Deleted Notices:', ['deletedNotices' => $deletedNotices]);
    
        return view('auth.deleted_notices', compact('deletedNotices'));
    }
}


