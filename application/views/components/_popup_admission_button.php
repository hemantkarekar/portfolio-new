<button class="btn btn-primary fixed-right-center" id="fixedBtn"><span>Admissions Open</span></button>

<script>
    $(document).ready(() => {
        $("#fixedBtn").on('click', ()=>{
            $('#admissionModal').modal('show');
        });
    });
</script>