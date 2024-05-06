<?php
function subsequente(){
    for($q=0; $q<12;$q++){
        echo $q."<br/>";
    }
    echo "<hr/>";
}

function main(){
    echo "Chamando subsequente() de dentro da main():<br/>";
    subsequente();
}

main(); // Chama a função main()

