<template>
    <div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th v-for="(item, index) in header" :key="index">{{item}}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in items" :key="index">
                    <td>{{item.name}}</td>
                    <td>{{item.gender}}</td>
                    <td>{{item.nik}}</td>
                    <td>{{item.no_hp}}</td>
                    <td>{{item.address}}</td>
                    <td>{{item.religion}}</td>
                    <td>{{item.education}}</td>
                    <td>{{item.blood}}</td>
                    <td>
                        <div class="row-action">
                            <button @click="EditDialog(item)">Edit</button>
                            <button @click="DeleteDialog(item)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    props: {
        items: {
            type: Array
        }
    },
    data () {
        return {
            header: [
                'Nama Pasien',
                'Jenis Kelamin',
                'NIK',
                'No HP',
                'Alamat',
                'Agama',
                'Pendidikan',
                'Golongan Darah',
                'Option'
            ],
        }
    },
    methods: {
        EditDialog (val) {
            this.$emit('optionEdit', val)
        },

        DeleteDialog (val) {
            this.$emit('optionDelete', val)
        }
    }
}
</script>

<style>
    @import './style.css';
</style>