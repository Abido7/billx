function changeToArabic() {
  var link = document.createElement("link");
  link.rel = "stylesheet"; // Add the rel attribute
  link.href = "css/stylesRTL.css"; // Set the correct href
  document.getElementsByTagName("head")[0].appendChild(link);
  document.getElementsByTagName("html")[0].setAttribute("lang", "ar");
  document.getElementsByTagName("html")[0].setAttribute("dir", "rtl");
}
