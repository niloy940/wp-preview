Vue.component('preview', {
    template: `
        <div>
            <br>
            <h4 class="heading">Type something to preview</h4>
            <br>
            Text (max. 40 characters per line)
            <br>

            <slot></slot>

            <br>
        </div>
    `,
});


Vue.component('modal', {
    template: `
        <div class="modal is-active">
            <div class="modal-card">
                <header class="modal-card-head">
                  <button @click="$emit('close')" class="delete" aria-label="close"></button>
                </header>

                <section class="modal-card-body">
                    <div class="box">
                        <slot></slot>
                    </div>
                </section>
            <div>
        </div>
    `,
});


new Vue({
    el: '#wp_per_app',

    data: {
        showModal: false,
        usertext: '',
    },

    methods: {
        typing() {
            document.getElementById('textfield').value = this.usertext;
        },
    },

    mounted() {
        document.getElementById("textfield").style.display = "none";
    }
});
