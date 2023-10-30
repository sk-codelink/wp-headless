import React, { useEffect, useState } from "react";
import axios from 'axios';
import Placeholder from './place-holder.png';
const Posts = () => {
    const [posts, setPosts] = useState([]);
    useEffect(() => {
        const post_url = `${import.meta.env.VITE_REACT_APP_API_ROOT}/posts`;
        axios.get(post_url).then((res) => {
            setPosts(res.data);
        });
    }, []);
    console.log('posts', posts);
    return (
        <>
            <div className="flex justify-between align-middle flex-wrap gap-10 py-10">
                {
                    posts && posts.map((post) => {
                        return (
                            <div key={post.id} className="card shadow-lg p-3 w-80 rounded-lg">
                                <img src="{Placeholder}" alt="" />
                                <h2 className="text-lg font-bold">{post.title.rendered}</h2>
                                <p dangerouslySetInnerHTML={{ __html: post.excerpt.rendered }}></p>
                            </div>
                        )
                    })
                }
            </div>
        </>
    )
}


export default Posts;