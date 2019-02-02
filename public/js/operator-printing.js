$(document).ready(function () {
    let toPrint = JSON.parse(localStorage.printitems);
    let table_content = '';
    $.each(toPrint,(key,data) => {
        table_content = '';
        console.log(data);
        $.each(data.get_association.get_routes, (key,data) => {
                table_content += `<tr>
                    <td> ${data.route_start} </td>
                    <td> ${data.route_end} </td>
                    <td> ${data.rate} php </td>
                    <td> ${data.rate} php</td>
                </tr>`
        });
        $( "#to-print" ).append(`
            <main class="py-4">
                <div class="container">
                    <div class="row row-justified-center" style="margin-top: 40px;">
                        <div class="col-md-12">
                            <div class="col-md-6" style="margin: auto;">
                                <div class="row" style="padding-bottom: 10px;"> 
                                    <div class="col-md-2">
                                        <img class="logo" src="${image_url}images/Province_of_Biliran_Official_Seal.png">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="login-title">
                                            Republic of the Philippines</br> 
                                            Province of Biliran</br>
                                            MUNICIPALITY OF NAVAL
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <img class="logo to-right" src="${image_url}images/Naval_biliran_seal.png">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-profile">
                                <h4>${data.type} Operators and Driver Information</h4>
                                <div class="row" style="padding-bottom: 10px;">
                                    <div class="col-md-12">
                                        <img class="act_profile" src="${image_url}${data.profile ? 'storage/' + data.profile : 'images/profile_default.jpg'}">
                                    </div>
                                    <div class="col-md-12">
                                        Name of Operator
                                    </div>
                                    <div class="col-md-12" style="padding-bottom: 10px;">
                                        <h4>${data.operator}</h4>
                                    </div>
                                    <div class="col-md-12" style="padding-bottom: 10px;">
                                        <b>Association:</b> ${data.association}
                                    </div>
                                    <div class="col-md-12" style="padding-bottom: 10px;">
                                        <b>Sticker Numbers:</b> ${data.sticker_number}
                                    </div>
                                    <div class="col-md-12">
                                        <b>Body Numbers:</b> ${data.body_number}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>AUTHORIZED FARES</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Route Start</th>
                                                    <th>Route End</th>
                                                    <th>Rate</th>
                                                    <th>Rate w/ Discount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ${table_content}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 20px;">
                                    <div class="col-md-3">
                                        <div>
                                            Minimum Fare: P 5.00
                                        </div>
                                        <div>
                                            Bellow 5 years: Free 
                                        </div>
                                        <div>
                                            5-12 Years old: P 5.00
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div style="border: 2px solid">
                                            For Complaints and Suggestions 
                                            <br>Please Call and Text:
                                            <br>Smart #: 09464083530  
                                            <br>Globe #: 09053565893
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div style="text-align: left;">Approved By:</div> 
                                        <div style="padding-top: 15px; font-weight: bold;">GERARD ROGER M. ESPINA</div>
                                        <div>Municipal Mayor</div>
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

const getDate = () => {
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


