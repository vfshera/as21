<form action="" wire:submit.prevent="send" class="contact-form w-5/6 sm:w-3/4 lg:w-3/5 mt-7 mb-14 lg:mb-28 2xl:w-1/2">

    <x-form.input-field label="Name" input-type="text" placeholder="Type your name here..."
        wire:model.debounce.500ms="name" />
    <x-form.input-field label="Email" input-type="email" placeholder="Type your email here..."
        wire:model.debounce.500ms="email" />
    <x-form.input-field label="WhatsApp Number" name="whatsappnumber" input-type="number"
        placeholder="Type your number here..." wire:model.debounce.500ms="whatsappnumber" />
    <x-form.text-area-field label="Message" name="message" wire:model.debounce.500ms="message" />
    <x-form.radio-field label="Email Me Back" name="mailback" wire:model.debounce.500ms="mailback" />
    <x-form.radio-field label="Add Me On WhatsApp" name="addonwhatsapp" wire:model.debounce.500ms="addonwhatsapp" />
    <button type="submit" class="btn-pri">
        Submit
    </button>
</form>
