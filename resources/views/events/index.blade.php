<x-app-layout>
    <div style="padding: 24px; max-width: 600px; margin: 0 auto; font-family: sans-serif;">
        <h2 style="font-size: 24px; font-weight: bold; color: #1f2937; margin-bottom: 20px;">Create New Event</h2>

        <form action="{{ route('events.store') }}" method="POST" style="background: white; padding: 24px; border: 1px solid #e5e7eb; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            @csrf

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #374151;">Event Title</label>
                <input type="text" name="title" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
            </div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #374151;">Description</label>
                <textarea name="description" rows="3" style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;"></textarea>
            </div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #374151;">Location</label>
                <input type="text" name="location" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
            </div>

            <div style="margin-bottom: 16px;">
                <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #374151;">Event Date</label>
                <input type="date" name="event_date" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
            </div>

            <div style="display: flex; gap: 16px; margin-bottom: 20px;">
                <div style="flex: 1;">
                    <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #374151;">Time In</label>
                    <input type="time" name="time_in" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                </div>
                <div style="flex: 1;">
                    <label style="display: block; font-weight: 600; margin-bottom: 6px; color: #374151;">Time Out</label>
                    <input type="time" name="time_out" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 6px;">
                </div>
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 10px;">
                <a href="{{ route('events.index') }}" style="padding: 10px 16px; background: #e5e7eb; color: #374151; border-radius: 6px; text-decoration: none; font-weight: 600;">Cancel</a>
                <button type="submit" style="padding: 10px 16px; background: #2563eb; color: white; border: none; border-radius: 6px; font-weight: 600; cursor: pointer;">Save Event</button>
            </div>
        </form>
    </div>
</x-app-layout>