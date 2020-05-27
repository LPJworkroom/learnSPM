/**
 * uniqueCounter.js by @lpjworkroom
 * give array data object unique id for v-for list rendering.
 */

let uniqueCounter=(function () {
    let id=0;
    return function () {return id++;};
})();

let addIdObj=function(obj){
    obj.id=uniqueCounter();
};

let addIdArray=function (arr) {
    arr.forEach((item)=>{
        item.id=uniqueCounter();
    });
};
export  {addIdArray, addIdObj};