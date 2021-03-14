const update = (key, data) => {
    localStorage.setItem(key, JSON.stringify(data));

    return true;
}


const get = (key) => {
    let storage = localStorage.getItem(key);
    let expires = localStorage.getItem('expires');
    let now = Date.now();

    if (storage && expires) {
        if (expires > now) {
            return JSON.parse(storage);
        } else {
            localStorage.clear();
            location.reload();
        }
    }

    return null;
}

const remove = (key) => {
    localStorage.removeItem(key);

    return true;
}

window.storage = {
    get: get,
    update: update,
    remove: remove
};