

const conversorUnity = () => {
    let valueOne = parseInt(document.getElementById('valueOne').value);
    let selectUnity = document.getElementById('selectUnity').value;
    let selectUnityTwo = document.getElementById('selectUnityTwo').value;
    let result = 0;

    if (selectUnity == 0 && selectUnityTwo ==1){
        result = valueOne / 1024;
    }else if (selectUnity == 0 && selectUnityTwo ==0){
        result = valueOne;
    }else if (selectUnity == 0 && selectUnityTwo == 2){
        result = valueOne / 1048576;
    }else if (selectUnity == 0 && selectUnityTwo == 3){
        result = valueOne / 1073741824;
    }else if (selectUnity == 0 && selectUnityTwo == 4){
        result = valueOne / 1099511627776;
    }else if (selectUnity == 1 && selectUnityTwo == 0){
        result = valueOne * 1024;
    }else if (selectUnity == 1 && selectUnityTwo == 1){
        result = valueOne;
    }else if (selectUnity == 1 && selectUnityTwo == 2){
        result = valueOne/1024;
    }else if (selectUnity == 1 && selectUnityTwo == 3){
        result = valueOne/1048576;
    }else if (selectUnity == 1 && selectUnityTwo == 4){
        result = valueOne/1073741824;
    }else if (selectUnity == 2 && selectUnityTwo == 0){
        result = valueOne * 1048576;
    }else if (selectUnity == 2 && selectUnityTwo == 1){
        result = valueOne * 1024;
    }else if (selectUnity == 2 && selectUnityTwo == 2){
        result = valueOne;
    }else if (selectUnity == 2 && selectUnityTwo == 3){
        result = valueOne / 1024;
    }else if (selectUnity == 2 && selectUnityTwo == 4){
        result = valueOne / 1048576;
    }else if (selectUnity == 3 && selectUnityTwo == 0){
        result = valueOne * 1073741824;
    }else if (selectUnity == 3 && selectUnityTwo == 1){
        result = valueOne * 1048576;
    }else if (selectUnity == 3 && selectUnityTwo == 2){
        result = valueOne * 1024;
    }else if (selectUnity == 3 && selectUnityTwo == 3){
        result = valueOne;
    }else if (selectUnity == 3 && selectUnityTwo == 4){
        result = valueOne/1024;
    }else if (selectUnity == 4 && selectUnityTwo == 0){
        result = valueOne * 1099511627776;
    }else if (selectUnity == 4 && selectUnityTwo == 1){
        result = valueOne * 1073741824;
    }else if (selectUnity == 4 && selectUnityTwo == 2){
        result = valueOne * 1048576;
    }else if (selectUnity == 4 && selectUnityTwo == 3){
        result = valueOne * 1024;
    }else if (selectUnity == 4 && selectUnityTwo == 4){
        result = valueOne;
    }else if (selectUnity == 4 && selectUnityTwo == 5){
        result = valueOne/1024;
    }

    return document.getElementById("valueTwo").value = result;
}





