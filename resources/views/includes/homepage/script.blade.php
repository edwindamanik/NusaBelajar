<script src="{{ asset('assets/homepage/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/homepage/js/count-up.min.js') }}"></script>
<script src="{{ asset('assets/homepage/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/homepage/js/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/homepage/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/homepage/js/main.js') }}"></script>
<script src="https://gahasapurba.com/js/ckeditor.js"></script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.3/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.6/sb-1.3.3/sp-2.0.1/sl-1.4.0/sr-1.1.1/datatables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62a9a67fd1e0f1fc"></script>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'id'},
            'google_translate_element'
        );
    }
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/62a9ad4eb0d10b6f3e777523/1g5jcpv1s';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
    @if(!request()->is('contact/create'))
        ClassicEditor
            .create(document.querySelector('textarea'))
    @endif
    $(document).ready(function() {
        $('.select2').select2({
            theme: 'bootstrap-5',
        });
    });
</script>