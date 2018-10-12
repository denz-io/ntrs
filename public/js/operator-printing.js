$(document).ready(function () {
    let toPrint = JSON.parse(localStorage.printitems);
    $.each(toPrint,(key,data) => {
        $( "#to-print" ).append(`
            <main class="py-4">
                <div class="container">
                    <div class="row row-justified-center" style="margin-top: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6" style="margin: auto;">
                                <div class="row"> 
                                    <div class="col-md-2">
                                        <img class="logo" src="${image_url}/images/Province_of_Biliran_Official_Seal.png">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="login-title">
                                            Naval Trisikad Registration System
                                        </div>
                                        <div class="login-title">
                                            ${getDate()}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <img class="logo to-right" src="${image_url}/images/Naval_biliran_seal.png">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-profile">
                                <h3>Operators Information:</h3>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="act_profile" src="${image_url}${data.profile ? '/storage/' + data.profile : 'images/profile_default.jpg'}">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="info-user">
                                            <b>Name:</b> 
                                            <div style="text-align: center">
                                                ${data.operator}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Address:</b> 
                                            <div style="text-align: center">
                                                ${data.address}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Contact:</b> 
                                            <div style="text-align: center">
                                                ${data.contact}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Body Number:</b> 
                                            <div style="text-align: center">
                                                ${data.body_number}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>OR Number:</b> 
                                            <div style="text-align: center">
                                                ${data.or_number}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Registration type:</b> 
                                            <div style="text-align: center">
                                                ${data.type}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Association:</b> 
                                            <div style="text-align: center">
                                                ${data.association}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Units:</b> 
                                            <div style="text-align: center">
                                                ${data.units}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Amount Paid:</b> 
                                            <div style="text-align: center">
                                                ${data.amount_paid}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Sticker Number:</b> 
                                            <div style="text-align: center">
                                                ${data.sticker_number ? data.sticker_number : 'none'}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div class="print-break"></div>
        `);
    });

    setTimeout(() => {
        window.print();
    }, 1000); 
})

function getDate()
{
    let monthNames = [
        "January", 
        "February", 
        "March", 
        "April", 
        "May", 
        "June",
        "July", 
        "August", 
        "September", 
        "October", 
        "November", 
        "December"
    ];

    let today = new Date();
    let y = today.getFullYear();
    let mth = today.getMonth() + 1;
    let d = today.getDate();
    return  y + '/' + d + '/' + monthNames[mth - 1]; 
}


