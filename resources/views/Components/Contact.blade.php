<form class="lg:w-1/3 md:w-10/12 sm:w-10/12">
    <x-input-grp label="Your Name" name="name" placeholder="John Doe" required>Enter your name</x-input-grp>
    <x-input-grp label="Your Email" name="email" type="email" placeholder="Enter your Email" required>Enter your
        Email</x-input-grp>
    <x-input-grp label="Your Phone" name="phone" type="tel" placeholder="Enter your Phone" required>Enter your
        number</x-input-grp>
    <x-input-grp label="Your Message" name="message" type="textarea" placeholder="Enter your Message" required>Enter
        your message</x-input-grp>
    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
