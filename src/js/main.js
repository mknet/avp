function Animal(id) {
    'use strict';
    this.id = id;
}

Animal.prototype.sound = function() {
    'use strict';
    var id = this.id;
    console.log('id='+id);
};

var dog = new Animal(1);
dog.sound();