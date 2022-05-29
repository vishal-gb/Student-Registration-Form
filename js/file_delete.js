    $(document).on('click', '.other-delete', function (event) {
    if (confirm('Do you want to delete this Entry') === true) {

        var tempid = $(this).data('key');
        var did  = this.id
        $.ajax({
            url: delete_other,
            type: 'post',
            data: {index: tempid, referenceId: '". $otherKey ."'},
            dataType: 'html',
            error: function () {
                alert('An error has occured while deleting.');
                return false;
            },
            success: function (data) {
                if (data) {
                    var row = document.getElementById(did);
                    row.parentNode.removeChild(row);
                    var reply = '<div class=\'alert alert-warning\' role=\'alert\'>Data Deleted Successfully</div>';
                    $('#otherAlert').html(reply).show();
                }

            },
        });
    } else
    {
        return false;
    }
});

$(document).on('click', '.admin-exp-delete', function (event) {
    if (confirm('Do you want to delete this Entry') === true) {
        var url = delete_exp;
        var content = $(this);
        var tempid = content.data('key');//.key;//x.split('-')[1];
        var did = this.id;
        var ref = content.data('referenceid');
        $.ajax({
            url: url,
            type: 'post',
            data: {index: tempid, referenceId: ref},
            dataType: 'html',
            error: function () {
                alert('An error has occured while deleting.');
                return false;
            },
            success: function (data) {
                if (data) {
                    content.closest('tr').remove();
                    var reply = '<div class=\'alert alert-warning\' role=\'alert\'>Data Deleted Successfully</div>';
                    $('#admin-expcontent').html(reply).show();
                }

            },
        });
    } else {
        return false;
    }
});
$(document).on('click', '.btn-delete', function (event) {
    // $('.btn-delete').on('click', function (event) {
    if (confirm('Do you want to delete this Entry') == true) {
        var url1 = delete_ug;
        var tempid = $(this).data('key');//.key;//x.split('-')[1];
        var did = this.id
        $.ajax({
            // url: '" . Yii::$app->urlManager->createUrl(['/jiacademic/ug/delete']) . "',
            url: url1,
            type: 'post',
            data: {index: tempid, referenceId: '" . $ugKey . "'},
            dataType: 'html',
            error: function () {
                alert('An error has occured while deleting.');
                return false;
            },
            success: function (data) {
                if (data) {
                    var row = document.getElementById(did);
                    row.parentNode.removeChild(row);
                    var reply = '<div class=\'alert alert-warning\' role=\'alert\'>Data Deleted Successfully</div>';
                    $('#ugAlert').html(reply).show();
                }

            },
        });
    } else {
        return false;
    }
});
$(document).on('click', '.pg-delete', function (event) {
    if (confirm('Do you want to delete this Entry') == true) {
        var url2 = delete_pg;
        var tempid = $(this).data('key');//.key;//x.split('-')[1];
        var did = this.id
        $.ajax({
            //   url: '" . \Yii::$app->urlManager->createUrl(['/jiacademic/pg/delete']) . "',
            url: url2,
            type: 'post',
            data: {index: tempid, referenceId: '" . $pgKey . "'},
            dataType: 'html',
            error: function () {
                alert('An error has occured while deleting.');
                return false;
            },
            success: function (data) {
                if (data) {
                    var row = document.getElementById(did);
                    row.parentNode.removeChild(row);
                    var reply = '<div class=\'alert alert-warning\' role=\'alert\'>Data Deleted Successfully</div>';
                    $('#pgAlert').html(reply).show();
                }

            },
        });
    } else {
        return false;
    }
});
$(document).on('click', '.btn-delete-res-project', function (event) {
    if (confirm('Do you want to delete this Entry') === true) {
        var url3 = delete_res_proj;
        var content = $(this);
        var tempid = $(this).data('key');
        var did = this.id;
        var ref = $(this).data('referenceid');
        $.ajax({
            // url: '" . \Yii::$app->urlManager->createUrl(['/form/researchproject/delete']) . "',
            url: url3,
            type: 'post',
            data: {index: tempid, referenceId: ref},
            dataType: 'html',
            error: function () {
                alert('An error has occurred while deleting.');
                return false;
            },
            success: function (data) {
                if (data) {
                    var row = document.getElementById(did);
                 //   row.parentNode.removeChild(row);
                    content.closest('tr').remove();
                    var reply = '<div class=\'alert alert-warning\' role=\'alert\'>Data Deleted Successfully</div>';
                    $('#jx-response-reseach-project').html(reply).show();
                }

            },
        });
    } else {
        return false;
    }
})
$(document).on('click', '.btn-delete-res-article', function (event) {
    if (confirm('Do you want to delete this Entry') === true) {
        var url4 = delete_res_art;
        var content = $(this);
        var tempid = $(this).data('key');
        var ref = $(this).data('referenceid');
        var did = this.id;
        $.ajax({
            // url: '" . \Yii::$app->urlManager->createUrl(['/form/researcharticle/delete']) . "',
            url: url4,
            type: 'post',
            data: {index: tempid, referenceId: ref},
            dataType: 'html',
            error: function () {
                alert('An error has occurred while deleting.');
                return false;
            },
            success: function (data) {
                if (data) {
                    var row = document.getElementById(did);
                    // row.parentNode.removeChild(row);
                    content.closest('tr').remove();
                    var reply = '<div class=\'alert alert-warning\' role=\'alert\'>Data Deleted Successfully</div>';
                    $('#research-article-response').html(reply).show();
                }

            },
        });
    } else {
        return false;
    }
})
$(document).on('click', '.btn-delete-res-pub', function (event) {

    if (confirm('Do you want to delete this Entry') == true) {
        var url5 = delete_res_pub;
        var tempid = $(this).data('key');
        var did = this.id;
        var ref = $(this).data('referenceid');
        var content = $(this);
        $.ajax({
            // url: '" . \Yii::$app->urlManager->createUrl(['/form/researchpublication/delete']) . "',
            url: url5,
            type: 'post',
            data: {index: tempid, referenceId: ref},
            dataType: 'html',
            error: function () {
                alert('An error has occurred while deleting.');
                return false;
            },
            success: function (data) {
                if (data) {
                    var row = document.getElementById(did);
                    // row.parentNode.removeChild(row);
                    content.closest('tr').remove();
                    var reply = '<div class=\'alert alert-warning\' role=\'alert\'>Data Deleted Successfully</div>';
                    $('#jx-response-reseach-pub').html(reply).show();
                }

            }
        });
    } else {
        return false;
    }
});


