<!-- Load Jquery and other -->
<script type="text/javascript" src="<?= base_url().'mdb/' ?>js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?= base_url().'mdb/' ?>js/tether.min.js"></script>
<script type="text/javascript" src="<?= base_url().'mdb/' ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url().'mdb/' ?>js/mdb.min.js"></script>


<!-- Custom JS -->
<script>
    // SideNav init
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

</script>

<script>
	new WOW().init();
</script>


<!-- ANGULAR -->
<script src="<?= base_url('mdb/js/angular.min.js') ?>"></script>
<script src="<?= base_url('mdb/js/search.js') ?>"></script>
<script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.10.0.js" type="text/javascript"></script>

