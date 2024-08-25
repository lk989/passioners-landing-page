<button class="btn btn-tab tab-header mx-1 py-3 px-4 text-dark" onclick="setActive(event)">
    <x-icon-label :imgFile="$imgFile" font="tajawal-medium" :label="$label"/>
</button>

<script>
    function setActive(event) {
        const currentButton = event.target.closest('.btn-tab');

        document.querySelectorAll('.btn-tab').forEach(btn => {
            btn.classList.remove('active');
        });

        currentButton.classList.add('active');
        currentButton.blur();
    }
</script>
