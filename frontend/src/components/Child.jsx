import React, { useEffect } from "react";

const Child = ()=>{
    useEffect(()=>{
console.log('Child');
    },[]);
    return  (
        <h1>hello this is a child component.</h1>
    )
}
export default Child;