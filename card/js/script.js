
$(function() {

  var links = [
      "card1.html",
      "card2.html",
      "card3.html",
      "card4.html",
      "card5.html"];

  openStuff = function () {
      // get a random number between 0 and the number of links
      var randIdx = Math.random() * links.length;
      // round it, so it can be used as array index
      randIdx = parseInt(randIdx, 10);
      // // construct the link to be opened
      // var link = 'http://' + links[randIdx];
      var link = links[randIdx];
      // open it in a new window / tab (depends on browser setting)
      window.open(link,"_self");
  };
  var slideToUnlockNew = new Dragdealer('slide-to-unlock-new', {
    x: 1,
    steps: 2,
    loose: true,
    callback: function(x, y) {
      // Only 0 and 1 are the possible values because of "steps: 2"
      if (!x) {
        this.disable();
        $('#slide-to-unlock-new').fadeOut();
        openStuff();
        // Bring unlock screen back after a while
        setTimeout(function() {
          slideToUnlockNew.enable();
          slideToUnlockNew.setValue(1, 0, true);
          $('#slide-to-unlock-new').fadeIn();
        }, 5000);
      }
    }
  });
})
