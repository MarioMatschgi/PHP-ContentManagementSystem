var valid_languages = ["en", "de"];

function getDifference(a, b) {
  var i = 0;
  var j = 0;
  var result = "";

  while (j < b.length) {
    if (a[i] != b[j] || i == a.length)
      result += b[j];
    else
      i++;
    j++;
  }
  return result;
}

function on_change_language(new_lang) {
  var cur_lang = window.location.pathname.split("/")[1];

  if (valid_languages.includes(cur_lang)) {
    if (new_lang == "auto" || new_lang == "") {
      window.location.pathname = window.location.pathname.replace("/" + cur_lang, "");
    }
    else {
      window.location.pathname = window.location.pathname.replace(cur_lang, new_lang);
    }
  }
  else {
    if (new_lang != "auto" && new_lang != "") {
      window.location.pathname = "/" + new_lang + window.location.pathname;
    }
  }
}