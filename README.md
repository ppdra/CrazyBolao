# Football Betting Pool Platform

An online betting pool platform created to transform an 18-year football tradition into a modern and accessible experience.

---

## 📖 Why This Project Exists

In 2008, seven friends passionate about football started a Champions League betting pool.  
The prize? Free pizza for the winner.

Everything was managed in an Excel spreadsheet.

Over the years, life happened. Some friends moved away, schedules became harder to match, and the tradition shifted to happening every four years during the World Cup.

In 2026, the pool turns 18 years old.

To celebrate this milestone, I decided to turn our spreadsheet-based tradition into a real online platform — making it easier to participate, more engaging, and accessible from anywhere.

This project is both a technical challenge and a tribute to a long-standing tradition.

---

## 🎯 What This Platform Does

- Allows users to place predictions before match kickoff
- Calculates points based on prediction accuracy
- Maintains a dynamic ranking system
- Tracks performance consistency over time
- Prevents rule-breaking (like editing bets after kickoff)

---

## 🏗️ Built With

- [Laravel](https://laravel.com/)
- [Livewire](https://livewire.laravel.com/)
- [Sheaf UI](https://sheafui.dev/)
- MySQL
- Docker

---

## ⚙️ Core Rules

- Bets are locked once the match starts.
- One bet per user per match.
- Points are awarded based on accuracy:
  - Exact score → full points
  - Correct outcome → partial points
  - Incorrect prediction → zero points

The ranking system updates automatically after match validation.

---

## 🧪 Current Phase

The platform is currently being tested by the same group of friends who started the tradition in 2008.

---

## 🚀 What's Next

- [ ] Reactions and social interaction between players
- [ ] Real-time notifications
- [ ] Automated test coverage (Unit + Feature)
- [ ] Performance optimizations



## 💡 Engineering Focus

While simple in concept, the platform emphasizes:

- Clear business rules
- Fair competition
- Predictable ranking logic
- Long-term maintainability