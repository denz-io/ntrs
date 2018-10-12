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
                                <h3>Associations Information:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info-user">
                                            <b>Name:</b> 
                                            <div style="text-align: center">
                                                ${data.name_full}(${data.name_short}) 
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Type:</b> 
                                            <div style="text-align: center">
                                                ${data.type}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info-user">
                                            <b>Contact:</b> 
                                            <div style="text-align: center">
                                                ${data.contact}
                                            </div>
                                        </div>
                                        <div class="info-user">
                                            <b>Registration Date:</b> 
                                            <div style="text-align: center">
                                                ${data.created_at}
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
        console.log('this is being called');
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


