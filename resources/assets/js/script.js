$(document).ready(function () {
    axios.get('/onload/likes').then(function (r) {
        $.map(r.data.likes, function (value, index) {
            $('[post-id=' + value.disscusion_id + '] > .like-count').text(value.total);
        });
    });

    axios.get('/onload/likes/dislikes').then(function (r) {
        $.map(r.data.dislikes, function (value, index) {
            $('[post-id=' + value.disscusion_id + '] > .dislike-count').text(value.total);
        });
    });

    $(document).on('click', '.form_post', function (e) {
        e.preventDefault();
        var $post_id = $(this).attr('post-id');
        var $form = $(this).closest('form');
        axios.post($form.attr('action'), $form.serialize()).then(function (r) {
            if (r.data.result == 'false'){
                toastr.error(r.data.newmessage);
            }
            else if (r.data.status == 'false') {
                toastr.error(r.data.message);
                $('#loginModal').modal('show');
            } else {
                if ($form.hasClass('share_post')) {
                    $('#status_body').val('');
                    $('.result').prepend(r.data);
                }
                if ($form.hasClass('post_comment')) {

                    $('.reply_' + $post_id).val('');
                    $('#post_' + $post_id).find('.all_replies').prepend(r.data);
                }
            }
        }).catch(function (r) {
        })
    });

    $(document).on('click', '.like-post', function (e) {

        e.preventDefault();
        var $id = $(this).attr('post-id');
        axios.post('post/like/' + $id).then(function (r) {
            if (r.data.status == false) {
                toastr.error(r.data.message)
                $('[post-id=' + $id + '] > .like-count').text(r.data.likes);
            }
            else if (r.data.status == true) {
                $('[post-id=' + $id + '] > .like-count').text(r.data.likes);
                toastr.success(r.data.message);
                $('[post-id=' + $id + '] > .dislike-count').text(r.data.dislikes);
            }
            else if (r.data.status == 'Not Login') {
                $('#loginModal').modal('show');
            }
        }).catch(function (r) {
        });

    });

    $(document).on('click', '.dislike-post', function (e) {
        e.preventDefault();
        var $id = $(this).attr('post-id');
        axios.post('/dislike/post/' + $id).then(function (r) {
            if (r.data.status == false) {
                toastr.error(r.data.message)
            }
            else if (r.data.status == true) {
                $('[post-id=' + $id + '] > .dislike-count').text(r.data.dislikes);
                $('[post-id=' + $id + '] > .like-count').text(r.data.likes);
                toastr.success(r.data.message);
            }
            else if (r.data.status == 'Not Login') {
                $('#loginModal').modal('show');
            }
        }).catch(function (r) {
        });
    });

    $(document).on('change', '#file-input', function (e) {

        var $e = $(this);
        if (this.files.length) {
            var formData = new FormData();
            var imageName = this.files[0].name;
            formData.append('avatar', this.files[0]);

            axios.post('/user/image/upload', formData).then(function (r) {
                if (r.data.status == 'success') window.location.reload();
                else toastr.error('Please Login For Activity.');
            }).catch(function (r) {
                toastr.error('We are facing some error. please try again.');
            })

        }

    });

    // $(document).on('click', '.login-btn', function (e) {
    //     e.preventDefault();
    //     debugger;
    //     var $form = $(this).closest('form');
    //     var $action = $($form).attr('action');
    //     var onLoginPage = (window.location.href.indexOf("login") > -1);
    //     axios.post($action, $form.serialize()).then(function (r) {
    //
    //         if (!onLoginPage) {
    //             toastr.success('user register please verify');
    //         } else {
    //             window.location.reload();
    //         }
    //
    //         // }
    //
    //
    //     }).catch(function (r) {
    //         debugger;
    //         if (r.request.status == 422) {
    //
    //             var $n = JSON.parse(r.request.responseText);
    //
    //             if ($n['errors']['password']) {
    //                 toastr.error($n['errors']['password'][0]);
    //             }
    //
    //             if ($n['errors']['name']) {
    //                 toastr.error($n['errors']['name'][0]);
    //             }
    //
    //             if ($n['errors']['email']) {
    //                 toastr.error($n['errors']['email'][0]);
    //             }
    //
    //         }
    //     });
    // });

});