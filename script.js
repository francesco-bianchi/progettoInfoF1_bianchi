document.addEventListener("DOMContentLoaded", function() {
    var rows = document.querySelectorAll(".clickable-row");
    rows.forEach(function(row) {
      row.style.cursor = "pointer";
      row.addEventListener("click", function() {
        window.location.href = row.dataset.href;
      });
    });
  });