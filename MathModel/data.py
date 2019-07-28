
import datatypes as types

jobs = [
    types.Job('Job 0', volume=500, coord=14, type=types.JobType.dry),
    types.Job('Job 1', volume=1000, coord=1, type=types.JobType.water),
    types.Job('Job 2', volume=100, coord=5, type=types.JobType.dry),
    types.Job('Job 3', volume=500, coord=2, type=types.JobType.water),
    types.Job('Job 4', volume=200, coord=4, type=types.JobType.dry),
    types.Job('Job 5', volume=300, coord=10, type=types.JobType.dry),
    types.Job('Job 6', volume=200, coord=7, type=types.JobType.snow),
    types.Job('Job 7', volume=2000, coord=2, type=types.JobType.dry),
    # types.Job('Job 8', volume=100, coord=15, type=types.JobType.dry),
    # types.Job('Job 9', volume=300, coord=8, type=types.JobType.water),
]

units = [
    types.Unit('Unit1', performance=100, speed=1, reequipment_time=1),
    types.Unit('Unit2', performance=200, speed=1, reequipment_time=1),
    types.Unit('Unit3', performance=100, speed=2, reequipment_time=2),
    types.Unit('Unit4', performance=150, speed=0.5, reequipment_time=1),
    types.Unit('Unit4', performance=150, speed=1, reequipment_time=1),
]
