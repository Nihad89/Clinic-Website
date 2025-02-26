<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AuditLog;
use Illuminate\Support\Facades\Auth;
use App\Models\Notice;

class AuditLogController extends Controller
{

    


    
    public function deleteNotice($id)
    {
        $notice = Notice::findOrFail($id);
    
        // Save the audit log entry
        AuditLog::create([
            'user_id' => Auth::id(),
            'user_name' => Auth::user()->name, // Ensure 'name' exists in your User model
            'action' => 'Deleted Notice',
            'description' => 'Deleted notice with ID: ' . $notice->id,
            'details' => json_encode($notice), // Save full details as JSON
        ]);
    
        // Delete the notice
        $notice->delete();
    
        return redirect()->back()->with('success', 'Notice deleted and logged successfully.');
    }
    
    
    
}




