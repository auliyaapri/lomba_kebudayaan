    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script src="<?=base_url()?>assets/js2/sweetalert2.all.min.js"></script>
    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0;

      function clearField(t) {
          if (!cleared[t.id]) {
              cleared[t.id] = 1;
              t.value = '';
              t.style.color = '#fff';
          }
      }
  </script>
</body>

</html>