// Работа с формами...
function AdminSystem(formSelect, options) {
	$(formSelect).on("submit", (e) => {
	  e.preventDefault();
	  const data = $(e.currentTarget).serialize() + "&" + options.param;
	  $.ajax({
		type: 'post',
		url: location.href,
		data: data,
		dataType: "json",
		success: function (data) {
		    options.success(data);
		},
		error: function () { return false; }
	  });
	  return false;
	});
}

// Создание всех нужных таблиц
AdminSystem("#add_table_as", {
	param: "add_table_as",
	success: function(data) {
        if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});

// Добавление Админа
AdminSystem("#add_admin_as", {
	param: "add_admin_as",
	success: function(data) {
        if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});

// Добавление бана
AdminSystem("#add_ban_as", {
	param: "add_ban_as",
	success: function(data) {
		if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});

// Добавление мута
AdminSystem("#add_mute_as", {
	param: "add_mute_as",
	success: function(data) {
		if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});

// Добавление гага
AdminSystem("#add_gag_as", {
	param: "add_gag_as",
	success: function(data) {
		if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});

// Добавление доступа
AdminSystem("#add_access_as", {
	param: "add_access_as",
	success: function(data) {
		if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});

// Сохранение настроек
AdminSystem("#add_settings_ms", {
	param: "add_settings_ms",
	success: function(data) {
		if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});

// Создание групп
AdminSystem("#add_group_ms", {
	param: "add_group_ms",
	success: function(data) {
		if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});

// Добавление VIP-игрока
AdminSystem("#add_vip_ms", {
	param: "add_vip_ms",
	success: function(data) {
		if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});

AdminSystem("#add_time_ms", {
	param: "add_time_ms",
	success: function(data) {
		if (typeof noty === "function") {
			if (data.status == "success") {
				noty(data.text, data.status, domain + '/storage/assets/sounds/success2.mp3', 0.2)
			} else {
				noty(data.text, data.status, domain + '/storage/assets/sounds/error.mp3', 0.2)
			}
        } else {
            note({ content: data.text, type: data.status, time: 5 });
        }
		if (data.status == "success") setTimeout(function () { location.reload(); }, 3000);
	}
});


// const amount17 = document.getElementById('amount17');
// if (amount17) {
// 	amount17.addEventListener('input', function() {
// 		if (this.value.length > 17) this.value = this.value.slice(0, 17);
// 	});
// }