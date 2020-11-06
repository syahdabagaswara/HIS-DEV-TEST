<template>
    <div>
        <div class="float-to-right">
            <button @click="OptionCreate">Create</button>
        </div>
        <table-component 
            :items="itemTable" 
            @optionEdit="OptionEdit"
            @optionDelete="OptionDelete" 
        />
        <dialog-component 
            ref="dialogcomponent"
            @refresh="GetItem"
        />
    </div>
</template>

<script>
import axios from 'axios'
import tableComponent from './components/atom/tableComponent'
import dialog from './components/atom/dialog'

export default {
    name: 'App',
    components: {
        'table-component': tableComponent,
        'dialog-component': dialog
    },
    data () {
        return {
            itemTable: []
        }
    },
    created () {
        this.GetItem()
    },
    methods: {
        GetItem () {
            axios.get('patient').then((res) => {
                this.itemTable = res.data
            })
        },
        OptionCreate () {
            this.$refs.dialogcomponent.OpenDialog('Add')
        },
        OptionEdit (val) {
            this.$refs.dialogcomponent.OpenDialog('Edit', val)
        },
        OptionDelete (val) {
            this.$refs.dialogcomponent.OpenDialog('Delete', val)
        }
    }
}
</script>

<style>
    @import './style.css';
</style>