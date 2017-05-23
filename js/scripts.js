
    /**
     * Blog Assignment
     * @author Nate Hascup <nshascup@gmail.com>
     * @version 1.0
     * My JS functions
     */

document.getElementById("hylianLink").addEventListener("click", indexRoutingLink);

function indexRoutingLink(){
    var b = document.getElementById('sender');
    if(b){
        b.submit();
    }
}