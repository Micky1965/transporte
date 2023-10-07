const alarms = [];
const getElement = (id) => document.getElementById(id);
const createElement = (tag) => document.createElement (tag);

class Clock {
    locale = "es-ES";

    init () {
        setInterval(this.build, 1000);
    }

    build = () => {
        const clockEl = getElement("digital-clock");
        const time = this.toLocaleTimeString(new Date);
        clockEl.innerHTML = time;
        this.checkAlarms(time);
    }

    clearForm = () => {
        getElement("hour").value = "";
        getElement("minute").value = "";
        getElement("second").value = "";
        getElement("hour").focus();
    }

    addAlarm = () => {
        const date = new Date;
        date.setHours(getElement("hour").value);
        date.setMinutes(getElement("minute").value);
        date.setSeconds(getElement("second").value);
        alarms.push(date);
        this.clearForm();
        this.displayAlarms();
    }

    renderAlarm = (alarm, alarmList) => {
        const li = createElement("li");
        li.innerHTML = `Alarma preparada: ${this.toLocaleTimeString(alarm)}`;
        alarmList.appendChild(li);
    }

    displayAlarms = () => {
        alarms.sort( (d1,d2) => d1 - d2);
        const alarmList = getElement("alarm-list");
        alarmList.innerHTML = "";
        for (let i = 0; i < alarms.length; i++) {
            this.renderAlarm(alarms[i], alarmList);
            
        }
    }

    checkAlarms = (time) => {
        for (let i = 0; i < alarms.length; i++) {
            const alarm = this.toLocaleTimeString(alarms[i]);
            if (alarm == time) {
                alarms.splice(i, 1);
                this.displayAlarms();
                alert(`Se debe cumplir con una reserva, por favor que el móvil 
            comience a dirigirse al lugar. Gracias`);
            }
        }
    }

    toLocaleTimeString = (date) => {
        return date.toLocaleTimeString(
            this.locale,
            {
                hours: "2-digit",
                minutes: "2-digit",
                seconds: "2-digit",
            }
        )
    }
}

const clock = new Clock;
clock.init();