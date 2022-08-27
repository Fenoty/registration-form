<template>
    <div class="form-main" @submit.prevent="onSubmit">
        <div class="header">Форма регистрации</div>
        <form action="addtobase.php">
            <div class="mb-3">
                <label class="form-label">Имя</label>
                <div class="input-flex">
                    <div class="red-line" v-if="!this.name.trim()">|</div>
                    <div class="green-line" v-else>|</div>
                    <input placeholder="Иван" type="text" id="input__name" maxlength="16" required v-model="name">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Фамилия</label>
                <div class="input-flex">
                    <div class="red-line" v-if="!this.lastname.trim()">|</div>
                    <div class="green-line" v-else>|</div>
                    <input placeholder="Иванов" type="text" id="input__lastname" maxlength="32" required v-model="lastname">
                </div>
                
            </div>
            <div class="mb-3">
                <label class="form-label">Электронная почта</label>
                <div class="input-flex">
                    <div class="red-line" v-if="!this.email.includes('@') || !this.email.includes('.')">|</div>
                    <div class="green-line" v-else>|</div>
                    <input placeholder="ivan@example.com" type="email" id="input__email" maxlength="30" required v-model="email">
                </div>
                
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <div class="input-flex">
                    <div class="red-line" v-if="
                    !this.password.trim() || this.password.length < 8
                    ">|</div>
                    <div class="green-line" v-else>|</div>
                    <input placeholder="**************" type="password" id="input__password" maxlength="20" required v-model="password">
            
                </div>
            </div>
            
            <button type="submit" class="btn">Отправить</button>
        </form>
    </div>
    
</template>

<script>
export default {
    data() {
        
        return {
            name: '',
            lastname: '',
            email: '',
            password: '',
            allData:''
        }
    },
    methods: {
        onSubmit(){
            let array = [];
            array.push(
                this.name,
                this.lastname,
                this.email,
                this.password
            );
            console.log(URL());
            // let url = '/form/src/components/database/addtobase.php'
            // axios({
            //     method: 'post',
            //     url: '/form/src/components/database/addtobase.php',
            //     data: bodyFormData,
            //     headers: {
            //         "X-Requested-With": "XMLHttpRequest"
            //     }
            // })
            // .then((response) => {
            //     console.log(response)
            // })
            // .catch((er) => {
            //     console.log(er)
            // })
        }
    }
}
</script>

<style scoped>
    form {
        padding: 0 2em 2em 2em;
        text-align: left;
        overflow: hidden;
    }
    .form-main{
        margin: 0 auto;
        max-width: 30%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   
    }
    .header {
        padding: 0.5em 0;
        font-size: 30px;
        border-bottom: 1px solid black;
    }
    .form-label {
        color: black;
        font-weight: 300;
        font-size: 24px;
        margin: 0.5em 0;
    }
    .mb-3 {
        margin: 0.5em 0;
        display: flex;
        flex-flow: column wrap;
    }
    input {
        font-size: 24px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        outline: none;
        border: none;
        width: 100%;
    }
    .btn {
        border: none;
        transition: 0.3s;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-top: 1em;
        font-size: 24px;
        background: #fff;
        padding: 0.3em;
        width: 100%;
        cursor: pointer;
    }
    .btn:hover {
        transition: 0.3s;
        border-radius: 1.5em;
    }
    .btn:active {
        opacity: 0.5;
    }
    .input-flex {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .red-line {
        background: red;
        width: 10px;
        color: red;
        user-select: none;
    }
    .green-line {
        background: rgb(0, 255, 0);
        width: 10px;
        color: rgb(0, 255, 0);
        user-select: none;
    }
</style>