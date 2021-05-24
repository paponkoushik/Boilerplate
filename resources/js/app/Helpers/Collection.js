export default class Collection {

    constructor(list) {
        this.list = list;
    }
    where(field, operator, value) {
        this.wheres.push({field, operator, value});
        return this;
    }
    get() {
        return this.list.filter(l => {
            return this.wheres.reduce((wheres, wh, i) => {

            }, '');
        })
    }
    pluck(field = 'id') {
        return this.list.map(data => {
            return data[field];
        })
    }
    fields(...fields) {
        this.fields = fields.length ? fields : ['id', 'value'];
        return this;
    }
    merge(list) {
        this.list = this.list.concat(list);
        return this;
    }
    shaper(field = 'translated_name', id = 'id') {
        if (this.list.length) {
            return this.list.map(data => {
                data.value = data[field];
                data.id = data[id];
                return data;
            })
        }
        return [];
    }
    find(value, field = 'id') {
        return this.list.find(l => {
            return l[field] == value;
        });
    }
    all() {
        return this.list;
    }
    removeObject(value, field = 'id') {
        return this.list.filter(l => {
            return String(l[field]) !== String(value);
        })
    }
}
