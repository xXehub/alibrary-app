$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $("meta[name=\"csrf-token\"]").attr("content")
    }
});

$(".number-only-input").on("keypress keyup blur", function(event) {
    /*$(this).val($(this).val().replace(/[^\d].+/, ""));*/
    $(this).val($(this).val().replace(/[^a-zA-Z0-9]/g, ""));
    if ((event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});

$(".latin-only-input").on("keypress keyup blur", function(event) {
    $(this).val($(this).val().replace(/[^a-z 0-9@.-]/gi, ""));
});

$(".identity-number-format").on("keypress keyup blur", function(event) {
    $(this).val($(this).val().toUpperCase());
    // Can't input space/blank char
    if (event.which === 32) {
        return false;
    }
});

$("#username").on("keyup keypress", function(e) {
    if (e.which === 32)
        return false;
    $(this).val($(this).val().toLowerCase());
});

$("form").submit(function() {
    $(this).submit(function() {
        return false;
    });

    return true;
});

window.mobileCheck = function() {
    let check = false;
    (function(a) {
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
};

function setBookFilterByLocationId(element) {
    let locations = "";
    $("[name=" + element + "]").each(function() {
        if ($(this).prop("checked")) {
            locations === "" ? locations = $(this).val() : locations += "," + $(this).val();
        }
    });
    $("[name=locations]").val(locations);
    if (window.mobileCheck() === false) {
        $("#get_books_form").submit();
    }
}

function setBookFilterBySubjectId(element) {
    let subjects = "";
    $("[name=" + element + "]").each(function() {
        if ($(this).prop("checked")) {
            subjects === "" ? subjects = $(this).val() : subjects += "," + $(this).val();
        }
    });
    $("[name=subjects]").val(subjects);
    if (window.mobileCheck() === false) {
        $("#get_books_form").submit();
    }
}

function setBookFilterByCategoryId(element) {
    let categories = "";
    $("[name=" + element + "]").each(function() {
        if ($(this).prop("checked")) {
            categories === "" ? categories = $(this).val() : categories += "," + $(this).val();
        }
    });
    $("[name=categories]").val(categories);
    if (window.mobileCheck() === false) {
        $("#get_books_form").submit();
    }
}

function passwordLengthValidate(params) {
    let pwd = $(params.element).val();

    if (pwd.length < 6) {
        $(params.message_element).removeClass("d-none");
    } else {
        $(params.message_element).addClass("d-none");
    }
}

function showAlertMessage(params = null) {
    $("#showAlertMessage").click();
    if (params) {
        $("#alertMessageLabel").html(params.title);
        $("#alertMessageText").html(params.subtitle);
        if (params.action) {
            $("#alertMessageAction").attr("onclick", params.action);
        } else {
            $("#alertMessageAction").removeAttr("onclick");
        }
    }
}

function dismissAlert(params) {
    $(params.element).modal("hide");
}

function wishlistAlert(message) {
    $("#api_alert").toast("show");
    $("#api_alert_message").html(message);
}

// Function to set data with expiration time in localStorage
function setLocalStorageWithExpiration(key, data, expirationInDays) {
    const expirationMs = expirationInDays * 24 * 60 * 60 * 1000; // Convert days to milliseconds
    const expirationTime = new Date().getTime() + expirationMs;
    const item = {
        data: data,
        expiration: expirationTime
    };
    localStorage.setItem(key, JSON.stringify(item));
}

// Function to get data from localStorage and check expiration
function getLocalStorageWithExpiration(key) {
    const itemStr = localStorage.getItem(key);
    if (!itemStr) return null;

    const item = JSON.parse(itemStr);
    const currentTime = new Date().getTime();

    if (currentTime > item.expiration) {
        // Data has expired, clear it from localStorage
        localStorage.removeItem(key);
        return null;
    }

    return item.data;
}

// $(document).on("click", ".add_catalog_reminder", function() {
//     let element = $(this);
//     let catalog_id = element.attr("data-catalog-id");
//     let user_id = element.attr("data-user-id");
//     let url = element.attr("data-url");
//     let icon = element.attr("data-icon");
//     $.ajax({
//         url: url + "/store",
//         data: {
//             catalog_id: catalog_id,
//             user_id: user_id
//         },
//         type: "POST",
//         success: function(response) {
//             element.removeClass("add_catalog_reminder");
//             element.addClass("remove_catalog_reminder");
//             if (icon) {
//                 element.removeClass("text-orange-500 bg-white");
//                 element.addClass("text-white bg-orange-500");
//                 element.children("span").text("Pengingat Telah Aktif");
//             }
//             $.toast(response.meta.message);
//         },
//         error: function(error) {
//             $.toast(error.responseJSON.meta.message);
//         }
//     });
// });
//
// $(document).on("click", ".remove_catalog_reminder", function() {
//     let element = $(this);
//     let catalog_id = element.attr("data-catalog-id");
//     let user_id = element.attr("data-user-id");
//     let url = element.attr("data-url");
//     let icon = element.attr("data-icon");
//     $.ajax({
//         url: url + "/destroy/" + catalog_id,
//         data: {
//             user_id: user_id
//         },
//         type: "DELETE",
//         success: function(response) {
//             element.removeClass("remove_catalog_reminder");
//             element.addClass("add_catalog_reminder");
//             if (icon) {
//                 element.removeClass("text-white bg-orange-500");
//                 element.addClass("text-orange-500 bg-white");
//                 element.children("span").text("Ingatkan Saya");
//             }
//             $.toast(response.meta.message);
//         },
//         error: function(error) {
//             $.toast(error.responseJSON.meta.message);
//         }
//     });
// });

$(document).on("click", ".add_wishlist", function() {
    let element = $(this);
    let catalog_id = element.attr("data-catalog-id");
    let user_id = element.attr("data-user-id");
    let catalog_source = element.attr("data-catalog-source");
    let url = element.attr("data-url");
    let icon = element.attr("data-icon");
    let wishlistCounter = document.getElementById("wishlistCounter");
    $.ajax({
        url: url + "/store",
        data: { catalog_id: catalog_id, user_id: user_id, catalog_source: catalog_source },
        type: "POST",
        success: function(response) {
            $.toast(response.meta.message);
            element.removeClass("add_wishlist");
            element.addClass("remove_wishlist");
            if (icon) {
                element.addClass("text-orange-600");
                element.children("span").addClass("text-orange-600");
                element.children("span").html(response.meta.message);
            }
            // let totalWishlist = parseInt(wishlistCounter.innerHTML) + 1;
            // wishlistCounter.innerHTML = totalWishlist.toString();
        },
        error: function(response) {
        }
    });
});

$(document).on("click", ".remove_wishlist", function() {
    let element = $(this);
    let catalog_id = element.attr("data-catalog-id");
    let user_id = element.attr("data-user-id");
    let catalog_source = element.attr("data-catalog-source");
    let url = element.attr("data-url");
    let icon = element.attr("data-icon");
    let wishlistCounter = document.getElementById("wishlistCounter");
    $.ajax({
        url: url + "/destroy/" + catalog_id,
        data: { user_id: user_id, catalog_source: catalog_source },
        type: "DELETE",
        success: function(response) {
            $.toast(response.meta.message);
            element.addClass("add_wishlist");
            element.removeClass("remove_wishlist");
            if (icon) {
                element.removeClass("text-orange-600");
                element.children("span").removeClass("text-orange-600");
                element.children("span").html("Tambahkan ke favorit");
            }
            // let totalWishlist = parseInt(wishlistCounter.innerHTML) - 1;
            // wishlistCounter.innerHTML = totalWishlist.toString();
        },
        error: function(response) {
        }
    });
});

$(document).on("click", "#shareBook", function() {
    let dummyElement = document.createElement("input");
    let currentUrl = window.location.href;
    document.body.appendChild(dummyElement);
    dummyElement.value = currentUrl;
    dummyElement.select();
    document.execCommand("copy");
    document.body.removeChild(dummyElement);

    $.toast("Tautan berhasil disalin");
});

$(document).on("change", ".books_search_input", function() {
    $("[name=keyword]").val(this.value);
    $("#get_books_form").submit();
});

function previewPhoto(element, target) {
    let file = element.files[0];
    let fileName = file.name;
    let fileExtension = fileName.split(".").pop().toLowerCase();

    if (fileExtension === "heic" || fileExtension === "heif") {
        document.getElementById(target).src = "https://placehold.co/800?text=Loading...&font=roboto";

        HEICConverter({
            blob: file,
            toType: "image/jpeg",
            quality: 0.7
        })
            .then(function(resultBlob) {
                convertBlobToDataURL(resultBlob, function(dataURL) {
                    displayImage(dataURL, target);
                });
            })
            .catch(function(error) {
                console.error("Error converting HEIC/HEIF to JPEG:", error);
            });
    } else {
        // For other image types, use FileReader
        let reader = new FileReader();
        reader.onload = function() {
            displayImage(reader.result, target);
        };
        reader.readAsDataURL(file);
    }
}

function displayImage(dataURL, target) {
    let output = document.getElementById(target);
    output.src = dataURL;
}

function convertBlobToDataURL(blob, callback) {
    const reader = new FileReader();
    reader.onload = function(event) {
        const dataURL = event.target.result;
        callback(dataURL);
    };
    reader.readAsDataURL(blob);
}

function compressImage(elementId, event) {
    const file = event.target.files[0];

    if (!file) {
        return;
    }

    new Compressor(file, {
        quality: 0.6,
        success(result) {
            let file = new File([result], result.name, {
                type: result.type,
                lastModified: new Date().getTime()
            });
            let container = new DataTransfer();
            container.items.add(file);
            document.getElementById(elementId).files = container.files;
        },
        error(error) {
        }
    });
}

function displayHeicImage(photoURL, elementId) {
    const extension = photoURL.substring(photoURL.length - 4);

    if (extension === "heic") {
        document.getElementById(elementId).src = "https://placehold.co/800?text=Loading...&font=roboto";

        fetch(photoURL)
            .then((res) => res.blob())
            .then((blob) => HEICConverter({
                blob,
                toType: "image/jpeg",
                quality: 0.7
            }))
            .then((conversionResult) => {
                document.getElementById(elementId).src = URL.createObjectURL(conversionResult);
                setLocalStorageWithExpiration("userProfilePhoto", { userProfilePhoto: conversionResult }, 10);
            })
            .catch((e) => {
                console.log(e);
            });
    } else {
        document.getElementById(elementId).src = photoURL;
    }
}
