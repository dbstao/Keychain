var animal_caretaker_keyboard_navigation_loop = function (elem) {
  var animal_caretaker_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var animal_caretaker_firstTabbable = animal_caretaker_tabbable.first();
  var animal_caretaker_lastTabbable = animal_caretaker_tabbable.last();
  animal_caretaker_firstTabbable.focus();

  animal_caretaker_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      animal_caretaker_firstTabbable.focus();
    }
  });

  animal_caretaker_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      animal_caretaker_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};