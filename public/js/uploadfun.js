
function onBeforeSend(formData, file) {
    console.log("Before Send");
    formData.append("test_field", "test_value");
    return (file.name.indexOf(".jpg") < -1) || (file.name.indexOf(".pdf") < -1) ? false : formData; // cancel all jpgs

}

function onQueued(e, files) {
    console.log("Queued");
    var html = '';
    for (var i = 0; i < files.length; i++) {
        html += '<li data-index="' + files[i].index + '"><span class="content"><span class="file">' + files[i].name + '</span><span class="cancel">Cancel</span><span class="progress">Queued</span></span><span class="bar"></span></li>';
    }

    $(this).parents("form").find(".filelist.complete")
        .html(html);
}

function onStart(e, files) {
    console.log("Start");
    $(this).parents("form").find(".filelist.complete")
        .find("li")
        .find(".progress").text("Waiting");
}

function onComplete(e) {
    console.log("Complete");
    // All done!
}

function onFileStart(e, file) {
    console.log("File Start");
    $(this).parents("form").find(".filelist.complete")
        .find("li[data-index=" + file.index + "]")
        .find(".progress").text("0%");
}

function onFileProgress(e, file, percent) {
    console.log("File Progress");
    var $file = $(this).parents("form").find(".filelist.complete").find("li[data-index=" + file.index + "]");

    $file.find(".progress").text(percent + "%")
    $file.find(".bar").css("width", percent + "%");
}



function onFileError(e, file, error) {
    console.log("File Error");
    $(this).parents("form").find(".filelist.complete")
        .find("li[data-index=" + file.index + "]").addClass("error")
        .find(".progress").text("Error: " + error);
}

function onChunkStart(e, file) {
    console.log("Chunk Start");
}

function onChunkProgress(e, file, percent) {
    console.log("Chunk Progress");
}

function onChunkComplete(e, file, response) {
    console.log("Chunk Complete");
}

function onChunkError(e, file, error) {
    console.log("Chunk Error");
};