<style>
    /* Message List Container */
    .message-list {
        margin-top: 20px;
    }

    /* Message Container */
    .message {
        background-color: #f4f4f4;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    /* Sender Info */
    .message p {
        margin: 0;
        font-size: 16px;
    }

    /* Actions */
    .actions {
        margin-top: 10px;
    }

    /* Reply Button */
    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Floating Reply Bar */
    .floating-reply-bar {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: none;
    }
</style>

<div class="message-list">
    @php
        $fakeMessages = [
            [
                'sender' => 'John Doe',
                'email' => 'john@example.com',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'sender' => 'Jane Smith',
                'email' => 'jane@example.com',
                'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'sender' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ],
        ];
    @endphp

    @foreach($fakeMessages as $message)
        <div class="message">
            <p><strong>From:</strong> {{ $message['sender'] }}</p>
            <p><strong>Email:</strong> {{ $message['email'] }}</p>
            <p><strong>Message:</strong> {{ $message['content'] }}</p>
            <div class="actions">
                <a href="#" class="btn btn-primary">Reply</a>
            </div>
        </div>
    @endforeach
</div>

<!-- Floating Reply Bar -->
<div class="floating-reply-bar">
    <textarea rows="4" cols="50" placeholder="Type your reply here"></textarea>
    <div style="margin-top: 10px;">
        <button class="btn btn-primary">Send</button>
        <button class="btn btn-secondary cancel-btn">Cancel</button>
    </div>
</div>

<script>
    // Show floating reply bar on clicking the reply button
    document.querySelectorAll('.btn-primary').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.floating-reply-bar').style.display = 'block';
        });
    });

    // Hide floating reply bar on clicking the cancel button
    document.querySelector('.cancel-btn').addEventListener('click', function() {
        document.querySelector('.floating-reply-bar').style.display = 'none';
    });
</script>
