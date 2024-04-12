<style>
    /* Message List Container */
    .message-list {
        margin-top: 20px;
    }

    /* Message Container */
    .message {
        background-color: rgba(0, 123, 255, 0.1);
        padding: 20px;
        width: fit-content;
        margin-bottom: 20px;
        color: white;
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

@php
    $fakeMessages = [
        [
            'sender' => 'John Doe',
            'email' => '',
            'content' => 'Hello, I am interested in your product.',
        ],
        [
            'sender' => 'Jane Doe',
            'email' => 'Jane@gmil.com',
            'content' => 'I would like to know more about your product.',
        ],
    ];
@endphp


<div class="table-container p-3 ">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        From
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Message
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fakeMessages as $message)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $message['sender'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $message['email'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $message['content'] }}
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <button class="btn-primary">Reply</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

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
