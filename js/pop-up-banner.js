vex.defaultOptions.className = 'vex-theme-top';

  var total_seconds = window.sessionStorage.getItem('total_seconds');

  total_seconds = (total_seconds != null && total_seconds > 0) ? total_seconds : 60 * 5;

  function CheckTime() {
    if (total_seconds <= 0) {
      if (sessionStorage.getItem('vexClosed') != 'closed') {
        vex.dialog.open({
          message: "Can't find what you are looking for maybe try going to aesseal.com",
          contentClassName: 'web-banner text-center',
          buttons: [
            Object.assign({}, vex.dialog.buttons.YES, {
              className: 'col-lg-4 col-lg-pull-2 col-xs-5 col-xs-pull-1 btn-red',
              text: 'Go to aesseal.com',
              click: function() {
                window.location.href = 'https://www.aesseal.com/';
              }
            }),
            Object.assign({}, vex.dialog.buttons.NO, {
              className: 'col-xs-5 col-xs-pull-1 col-lg-4 col-lg-pull-2 btn-default',
              text: 'Remain on this site',
            })
          ],
          afterClose: function() {
            sessionStorage.setItem('vexClosed', 'closed');
          }
        });
      }
    } else {
      total_seconds = total_seconds - 1;

      setTimeout("CheckTime()", 1000);
    }

    window.sessionStorage.setItem('total_seconds', total_seconds);
  }
  setTimeout("CheckTime()", 1000);
