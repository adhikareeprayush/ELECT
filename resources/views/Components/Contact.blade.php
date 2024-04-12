<h2 class="text-3xl font-semibold text-gray-900 dark:text-gray-900 text-center mt-3">Contact Us</h2>

<form action="/" method="POST" class="mt-6 mx-auto max-w-md space-y-4">
    @csrf
    <div class="space-y-4">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Your Name</label>
            <input type="text" id="name" name="name" class="input-field" placeholder="John Doe" required>
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Your Email</label>
            <input type="email" id="email" name="email" class="input-field" placeholder="name@gmail.com" required>
        </div>
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Your Phone</label>
            <input type="tel" id="phone" name="phone" class="input-field" placeholder="Enter your Phone" required>
        </div>
        <div>
            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Your Subject</label>
            <input type="text" id="subject" name="subject" class="input-field" placeholder="Enter your Subject" required>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Your Message</label>
            <textarea id="message" name="message" rows="6" class="input-field" placeholder="Leave a comment..." required></textarea>
        </div>
    </div>
    <button type="submit" class="btn-submit">Submit</button>
</form>

<style>
.input-field {
    border: 1px solid #CBD5E0;
    background-color: #EDF2F7;
    color: #4A5568;
    padding: 10px;
    border-radius: 0.375rem;
    width: 100%;
    transition: border-color 0.3s ease;
}

.input-field:focus {
    border-color: #4C51BF;
    outline: none;
}

.btn-submit {
    padding: 0.75rem 1.25rem;
    font-size: 0.875rem;
    font-weight: 500;
    text-align: center;
    color: #ffffff;
    background-color: #2B6CB0;
    border: none;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-submit:hover {
    background-color: #2C5282;
}

</style>