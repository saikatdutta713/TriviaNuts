<div class="message-modal" id="message-modal">
    <div class="modal-content">
        <div class="modal-header {{ $type }}">
            <span
                class="icon @if ($type== 'success') fa-regular fa-circle-check @elseif ($type=='error' ) fa-regular fa-circle-xmark @elseif ($type=='warning' ) fa-solid fa-circle-exclamation @endif"></span>
            @if ($type=="success")
            <h2>Success!</h2>
            @elseif ($type=="error")
            <h2>Opps!</h2>
            @elseif ($type=="warning")
            <h2>Warning!</h2>
            @endif
        </div>
        <div class="modal-body">
            <p>{{ $message }}</p>
        </div>
        <div class="modal-buttons">
            @if ($buttonText && $buttonLink)
            <a href="{{ $buttonLink }}" class="redirect-button {{ $type }}">{{ $buttonText }}</a>
            @elseif($buttonText && !$buttonLink)
            <button class="close-button {{ $type }}" id="close-button">{{ $buttonText }}</button>
            @elseif($showCloseButton)
            <button class="close-button" id="close-button">Close</button>
            @endif
        </div>
    </div>
</div>

<script>
    // Get modal elements
    let modal = document.getElementById("message-modal");
    let modalClose = document.getElementById("close-button");
    
    // Function to close the modal
    function closeModal() {
        modal.style.display = "none";
    }
    
    // Event listeners
    modalClose.onclick = closeModal;

</script>