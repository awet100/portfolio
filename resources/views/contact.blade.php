<x-layout title="contact"/>

<x-main-section>
    <x-heading-2>
        Let's talk.
    </x-heading-2>

    <x-muted>
        <p>Get in touch via the form below, or by emailing <x-main-link url="mailto: abc@example.com">hello@nad.is</x-main-link>.</p>
    </x-muted>

    <form>
        <div class="mb-3">
            <label for="nameInput" class="form-label">Name:</label>
            <input type="text" class="form-control bg-dark border-0 text-white-50" id="nameInput" placeholder="Enter your name">
        </div>

        <div class="mb-3">
            <label for="emailInput" class="form-label">Email Address:</label>
            <input type="email" class="form-control bg-dark border-0 text-white-50" id="emailInput" placeholder="Enter your email address">
        </div>
        <div class="mb-3">
            <label for="messageTextarea" class="form-label">Message:</label>
            <textarea class="form-control bg-dark border-0 text-white-50" placeholder="Enter your message" id="messageTextarea"  style="height:
            100px"></textarea>
        </div>
        <button type="submit" class="btn-lg btn-primary bg-dark border-0 text-warning">Submit</button>
    </form>
</x-main-section>
