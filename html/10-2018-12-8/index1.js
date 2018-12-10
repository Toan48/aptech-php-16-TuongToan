document.getElementById('btnon').addEventListener('click', changelight)
function changelight()
{
    var image = document.getElementById("img1");
    if (image.src.match("bulbon")) 
    {
        image.src = "./pic_bulboff.gif";
    } 
    else 
    {
        image.src = "./pic_bulbon.gif";
    }
}   