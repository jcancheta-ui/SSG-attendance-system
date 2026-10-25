<x-app-layout>
    <div style="padding: 20px; font-family: sans-serif; max-width: 800px; margin: 0 auto;">
        
        <div style="background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <h2 style="font-size: 24px; font-weight: bold; color: #1f2937; margin-bottom: 12px;">
                Welcome, {{ Auth::user()->name }}!
            </h2>

            <div style="margin-bottom: 20px;">
                <span style="font-size: 14px; font-weight: 600; text-transform: uppercase; padding: 4px 12px; border-radius: 9999px; background-color: #dbeafe; color: #1e40af;">
                    Role: 
                    @if(Auth::user()->role_id == 1)
                        System Admin
                    @elseif(Auth::user()->role_id == 2)
                        SSG Officer
                    @elseif(Auth::user()->role_id == 3)
                        Adviser
                    @else
                        Student
                    @endif
                </span>
            </div>

            <p style="color: #4b5563; font-size: 16px; margin-bottom: 20px;">
                You are successfully logged into the SPAMAST SSG Attendance System.
            </p>

            <hr style="border: 0; border-top: 1px solid #e5e7eb; margin: 20px 0;">

            <!-- Quick Action Cards -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;">
                @if(Auth::user()->role_id == 1)
                    <div style="background: #f3f4f6; padding: 16px; border-radius: 6px; border-left: 4px solid #ef4444;">
                        <h4 style="font-weight: bold; margin-bottom: 4px; color: #991b1b;">Admin Panel</h4>
                        <p style="font-size: 13px; color: #6b7280;">Manage users, system roles, and logs.</p>
                    </div>
                @endif

                @if(in_array(Auth::user()->role_id, [1, 2]))
                    <div style="background: #f3f4f6; padding: 16px; border-radius: 6px; border-left: 4px solid #3b82f6;">
                        <h4 style="font-weight: bold; margin-bottom: 4px; color: #1e40af;">Events Management</h4>
                        <p style="font-size: 13px; color: #6b7280;">Create events & generate QR codes.</p>
                    </div>
                    <div style="background: #f3f4f6; padding: 16px; border-radius: 6px; border-left: 4px solid #10b981;">
                        <h4 style="font-weight: bold; margin-bottom: 4px; color: #065f46;">Attendance Scanner</h4>
                        <p style="font-size: 13px; color: #6b7280;">Scan student QR codes for attendance.</p>
                    </div>
                @endif

                <div style="background: #f3f4f6; padding: 16px; border-radius: 6px; border-left: 4px solid #8b5cf6;">
                    <h4 style="font-weight: bold; margin-bottom: 4px; color: #5b21b6;">My Attendance Records</h4>
                    <p style="font-size: 13px; color: #6b7280;">View personal attendance history and sanctions.</p>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>