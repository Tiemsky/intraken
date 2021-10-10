<script>
    $(document).ready(function() {
        $('.nice-select').niceSelect();
        $('.nice-select').on('change', function (e) {
            @this.set('selectedModel', e.target.value);
        });
    });
</script>