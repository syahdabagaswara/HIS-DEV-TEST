<template>
    <transition name="modal" v-if="dialog">
        <div class="modal-mask">
            <div class="modal-wrapper">
            <div class="modal-container">

                <div class="modal-header">
                    {{mode === 'Add' ? 'Tambah' : mode}} Data Pasien
                </div>

                <div class="modal-body grid-row" v-if="mode !== 'Delete'">
                    <div class="grid-col">
                        <p>Nama</p>
                        <input type="text" v-model="req.name">
                    </div>
                    <div class="grid-col">
                        <p>Jenis Kelamin</p>
                        <select type="text" v-model="req.gender">
                            <option v-for="(option, index) in listGender" :key="index">{{ option }}</option>
                        </select>
                    </div>
                    <div class="grid-col" >
                        <p>NIK</p>
                        <input type="text" v-model="req.nik">
                    </div>
                    <div class="grid-col">
                        <p>No HP</p>
                        <input type="text" v-model="req.no_hp">
                    </div>
                    <div class="grid-col">
                        <p>Alamat</p>
                        <input type="text" v-model="req.address">
                    </div>
                    <div class="grid-col">
                        <p>Agama</p>
                        <select type="text" v-model="req.religion">
                            <option v-for="(option, index) in listReligion" :key="index">{{ option }}</option>
                        </select>
                    </div>
                    <div class="grid-col">
                        <p>Pendidikan</p>
                        <select type="text" v-model="req.education">    
                            <option v-for="(option, index) in listEducation" :key="index">{{ option }}</option>
                        </select>
                    </div>
                    <div class="grid-col">
                        <p>Golongan Darah</p>
                        <select type="text" v-model="req.blood">
                            <option v-for="(option, index) in listBlood" :key="index">{{ option }}</option>
                        </select>
                    </div>
                </div>

                <div v-else class="modal-body">
                    Apakah anda yaking menghapus data ini ?
                </div>

                <div class="modal-footer">
                    <button class="modal-default-button" @click="CloseDialog">
                    Close
                    </button>
                    <button class="modal-default-button" @click="SubmitForm">
                    {{mode === 'Add' ? 'Tambah' : mode }}
                    </button>
                </div>
            </div>
            </div>
        </div>
    </transition>
</template>

<script>
import axios from 'axios'
export default {
    data () {
        return {
            dialog: false,
            req: {},
            mode: 'Add',
            listGender: [
                'Laki-Laki',
                'Perempuan'
            ],
            listReligion: [
                'Islam',
                'Kristen',
                'Katolik',
                'Hindu',
                'Budha'
            ],
            listEducation: [
                'Doktor',
                'Magister',
                'Sarjana',
                'SMA',
                'SMP',
                'SD',
                'TK'
            ],
            listBlood: [
                'A Positif',
                'A Negatif',
                'B Positif',
                'B Negatif',
                'AB Positif',
                'AB Negatif',
                'O Positif',
                'O Negatif',
            ]
        }
    },
    methods: {
      OpenDialog (mode, item) {
          this.mode = mode
          if (mode === 'Add') {
              this.req = {}
          } else {
              this.req = JSON.parse(JSON.stringify(item))
          }
          this.dialog = true
      },
      CloseDialog () {
          this.dialog = false
          this.req = {}
      },
      SubmitForm () {
          const body = new FormData()
          body.append('name', this.req.name)
          body.append('gender', this.req.gender)
          body.append('nik', this.req.nik)
          body.append('no_hp', this.req.no_hp)
          body.append('address', this.req.address)
          body.append('religion', this.req.religion)
          body.append('education', this.req.education)
          body.append('blood', this.req.blood)

          if (this.mode === 'Add') {
                axios.post('patient/save', body).then(() => {
                    this.CloseDialog()
                    this.$emit('refresh')
                })
          } 

          if (this.mode === 'Edit') {
                body.append('id', this.req.id)
                axios.post('patient/edit', body).then(() => {
                    this.CloseDialog()
                    this.$emit('refresh')
                })
          }

          if (this.mode === 'Delete') {
                body.append('id', this.req.id)
                axios.post('patient/delete', body).then(() => {
                    this.CloseDialog()
                    this.$emit('refresh')
                })
          }
      },  
    }
}
</script>

<style>
    @import './style.css';
</style>