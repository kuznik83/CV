function addPrLang() {
    var input = $("<input type='text' name='programlang[]'>");
    var select = $("<select name = 'level[]'> " +
        "<option value='Beginner' selected>Beginner" +
        "<option value='Junior'>Junior" +
        "<option value='Senior'>Senior" +
        "</select><br>");
    input.insertBefore($("#removePrLang"));
    select.insertAfter(input);
};

function removePrLang() {
    var inputArr = $("input[name=programlang\\[\\]]");
    var selectArr = $("select[name=level\\[\\]]");
    var br = (selectArr.last()).next();
    if (inputArr.length > 1) {
        (inputArr.last()).remove();
        (selectArr.last()).remove();
        br.remove();
    };
}

function addLang() {
    var input = $("<input type='text' name='languages[]'> ");
    var selectCom = $("<select name = 'comprehension[]'> " +
        "<option disabled selected>-Comprehension-" +
        "<option value='Beginner'>Beginner" +
        "<option value='Intermediate'>Intermediate" +
        "<option value='Advanced'>Advanced" +
        "<option value='Proficiency'>Proficiency" +
        "</select>");
    var selectRead = $("<select name = 'reading[]'> " +
        "<option disabled selected>-Reading-" +
        "<option value='Beginner'>Beginner" +
        "<option value='Intermediate'>Intermediate" +
        "<option value='Advanced'>Advanced" +
        "<option value='Proficiency'>Proficiency" +
        "</select>");
    var selectWrite = $("<select name = 'writing[]'> " +
        "<option disabled selected>-Writing-" +
        "<option value='Beginner'>Beginner" +
        "<option value='Intermediate'>Intermediate" +
        "<option value='Advanced'>Advanced" +
        "<option value='Proficiency'>Proficiency" +
        "</select>");
    input.insertBefore($("#removeLang"));
    selectCom.insertAfter(input);
    selectRead.insertAfter(selectCom);
    selectWrite.insertAfter(selectRead);
};

function removeLang() {
    var inputArr = $("input[name=languages\\[\\]]");
    var selArrCom = $("select[name=comprehension\\[\\]]");
    var selArrRead = $("select[name=reading\\[\\]]");
    var selArrWrit = $("select[name=writing\\[\\]]");
    if (inputArr.length > 1) {
        (inputArr.last()).remove();
        (selArrCom.last()).remove();
        (selArrRead.last()).remove();
        (selArrWrit.last()).remove();
    };
};

$(document).ready(function () {
    $("#addPrLang").bind("click",addPrLang);
    $("#removePrLang").bind("click",removePrLang);
    $("#addLang").bind("click",addLang)
    $("#removeLang").bind("click",removeLang);
});