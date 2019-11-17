<template>
    <div id="app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">Example Component</div>

                        <div class="card-body">
                            I'm an example component.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</template>

<script>
   export default {
        props: {
            contacts: {
                type: Array,
                default: [],

            }
        },
        data() {
            return {
                selected: 0
            };
        },
        methods: {//selectContactをおしたら
            selectContact(index, contact) {
                this.selected = index;
                this.$emit('selected', contact);
            }
        }
    },

</script>
