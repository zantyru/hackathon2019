from collections import namedtuple
from enum import Enum

class JobType(Enum):
    no = 0,
    dry = 1,
    water = 2,
    snow = 4

Job = namedtuple('Job', [
    'job',
    'volume',
    'coord',
    'type'
])

Unit = namedtuple('Unit', [
    'job',
    'performance',
    'speed',
    'reequipment_time'
])
