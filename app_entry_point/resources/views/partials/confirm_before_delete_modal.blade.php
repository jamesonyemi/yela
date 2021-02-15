<script>

  $(document).on("submit", "#deleteForm", function () {
      let href = $(this).attr('href');
      let FormControl  = document.querySelector("#deleteForm");
      console.log(href);
      let res = FormControl.setAttribute('action',href);
      console.log(res);
  })

</script>
