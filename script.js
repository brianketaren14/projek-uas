$(document).ready(function () {
  $('.berita').hover(
    function () {
      $(this).animate(
        {
          marginTop: '-=1%',
        },
        200
      );
    },

    function () {
      $(this).animate(
        {
          marginTop: '0%',
        },
        200
      );
    }
  );
  $('.loader-container').fadeOut('slow');
});
