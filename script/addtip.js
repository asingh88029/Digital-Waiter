let tip10btn=document.getElementById('amt1-btn');
tip10btn.addEventListener("click",tip10rupee);

let tip50btn=document.getElementById('amt2-btn');
tip50btn.addEventListener("click",tip50rupee);

let tip100btn=document.getElementById('amt3-btn');
tip100btn.addEventListener("click",tip100rupee);

function tip10rupee(){
 let amt =10;
 tip10btn.style.background="#299220";
 tip10btn.style.color="#FFFFFF";
 window.location.href = `pages/payment-summary.php?amt=${amt}`;
}

function tip50rupee(){
    let amt =50;
    tip50btn.style.background="#299220";
    tip50btn.style.color="#FFFFFF";
    window.location.href = `pages/payment-summary.php?amt=${amt}`;
}

function tip100rupee(){
    let amt =100;
    tip100btn.style.background="#299220";
    tip100btn.style.color="#FFFFFF";
    window.location.href = `pages/payment-summary.php?amt=${amt}`;
}
